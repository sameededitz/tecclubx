<?php

namespace App\Livewire;

use App\Mail\ContactFormCopyMail;
use App\Mail\ContactFormMail;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $first_name, $last_name, $email, $number, $company, $website, $services = [], $message;
    public $recaptcha;

    protected function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'services' => 'required|array',
            'message' => 'required|string',
            'recaptcha' => ['required', new Recaptcha],
        ];
    }

    public function submit()
    {
        $this->validate();

        $formdata = [
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'phone' => $this->number,
            'company' => $this->company,
            'website' => $this->website,
            'message' => $this->message,
            'service' => implode(', ', $this->services),
        ];

        Mail::to(env('MAIL_OWNER'))->send(new ContactFormMail($formdata));

        $this->resetForm();
        return redirect()->route('contact')->with([
            'status' => 'success',
            'message' => 'Thank you for contacting us! We will get back to you shortly.',
        ]);
    }

    public function captcha()
    {
        $this->dispatch('g_recaptcha_response');
    }

    private function resetForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->number = '';
        $this->company = '';
        $this->website = '';
        $this->message = '';
        $this->services = [];
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
