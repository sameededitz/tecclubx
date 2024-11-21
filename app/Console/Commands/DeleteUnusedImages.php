<?php

namespace App\Console\Commands;

use App\Models\ImageMetadata;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteUnusedImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete images that are not used';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $unusedImages = ImageMetadata::where('is_used', false)->get();
        if ($unusedImages->isEmpty()) {
            $this->info('No unused images found.');
            return;
        }
        foreach ($unusedImages as $image) {
            // Delete the image from storage
            if (Storage::disk('upload')->exists($image->path)) {
                Storage::disk('upload')->delete($image->path);
                $this->info("Deleted: " . $image->path);
            } else {
                $this->warn("File not found: " . $image->path);
            }

            // Delete the record from the database
            $image->delete();
        }
        $this->info('Unused images have been deleted successfully.');
    }
}
