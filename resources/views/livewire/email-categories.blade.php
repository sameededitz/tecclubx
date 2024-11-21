<div>
    <div class="row gy-4">
        <div class="col-xxl-3">
            <div class="card h-100 p-0">
                <div class="card-body p-24">
                    <a href="{{ route('compose-email') }}"
                        class="btn btn-primary text-sm btn-sm px-12 py-12 w-100 radius-8 d-flex align-items-center gap-2 mb-16">
                        <iconify-icon icon="fa6-regular:square-plus" class="icon text-lg line-height-1"></iconify-icon>
                        Compose
                    </a>

                    <div class="mt-16">
                        <ul>
                            <li class="{{ $selectedCategory == 'inbox' ? 'item-active' : '' }} mb-4">
                                <a wire:click.prevent="setCategory('inbox')"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="uil:envelope"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Inbox</span>
                                        </span>
                                        <span class="fw-medium">{{ $categoryCounts['inbox'] ?? 0 }}</span>
                                    </span>
                                </a>
                            </li>
                            <li class="{{ $selectedCategory == 'starred' ? 'item-active' : '' }} mb-4">
                                <a wire:click.prevent="setCategory('starred')"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="ph:star-bold"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Starred</span>
                                        </span>
                                        <span class="fw-medium">{{ $categoryCounts['starred'] ?? 0 }}</span>
                                    </span>
                                </a>
                            </li>
                            <li class="{{ $selectedCategory == 'sent' ? 'item-active' : '' }} mb-4">
                                <a wire:click.prevent="setCategory('sent')"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="ion:paper-plane-outline"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Sent</span>
                                        </span>
                                        <span class="fw-medium">{{ $categoryCounts['sent'] ?? 0 }}</span>
                                    </span>
                                </a>
                            </li>
                            <li class="{{ $selectedCategory == 'draft' ? 'item-active' : '' }} mb-4">
                                <a wire:click.prevent="setCategory('draft')"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="lucide:pencil"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Draft</span>
                                        </span>
                                        <span class="fw-medium">{{ $categoryCounts['draft'] ?? 0 }}</span>
                                    </span>
                                </a>
                            </li>
                            {{-- <li class="mb-4">
                                <a href="email.html"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="ph:warning-bold"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Spam</span>
                                        </span>
                                        <span class="fw-medium">30</span>
                                    </span>
                                </a>
                            </li> --}}
                            <li class="{{ $selectedCategory == 'trash' ? 'item-active' : '' }} mb-4">
                                <a wire:click.prevent="setCategory('trash')"
                                    class="bg-hover-primary-50 px-12 py-8 w-100 radius-8 text-secondary-light">
                                    <span class="d-flex align-items-center gap-10 justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-10">
                                            <span class="icon text-xxl line-height-1 d-flex"><iconify-icon
                                                    icon="material-symbols:delete-outline"
                                                    class="icon line-height-1"></iconify-icon></span>
                                            <span class="fw-semibold">Bin</span>
                                        </span>
                                        <span class="fw-medium">{{ $categoryCounts['trash'] ?? 0 }}</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="card h-100 p-0 email-card">
                <div class="card-header border-bottom bg-base py-16 px-24">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input radius-4 border input-form-dark" type="checkbox"
                                    name="checkbox" id="selectAll" wire:click="toggleSelectAll"
                                    {{ count($selectedEmails) === count($messages) ? 'checked' : '' }}>
                            </div>

                            @if ($selectedCategory === 'trash')
                                <button type="button" wire:click="restoreSelected"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="ic:sharp-restore" class="icon"></iconify-icon>
                                </button>
                                <button type="button" wire:click="permanentlyDeleteSelected"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="hugeicons:delete-04" class="icon"></iconify-icon>
                                </button>
                            @else
                                <button type="button" wire:click="fetchEmails"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="tabler:reload" class="icon"></iconify-icon>
                                </button>
                                <button type="button" wire:click="deleteSelected"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="fluent:delete-24-regular" class="icon"></iconify-icon>
                                </button>
                                <button type="button" wire:click="markAsRead"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="gravity-ui:envelope-open" class="icon"></iconify-icon>
                                </button>
                            @endif

                            <form class="navbar-search d-lg-block d-none">
                                <input type="text" class="bg-base h-40-px w-auto" name="search"
                                    placeholder="Search">
                                <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                            </form>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <span class="text-secondary-light line-height-1">1-12 of 1,253</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link d-flex bg-base border text-secondary-light text-xl"
                                            href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2"
                                                class="icon"></iconify-icon> </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link d-flex bg-base border text-secondary-light text-xl"
                                            href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-right-2"
                                                class="icon"></iconify-icon> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="overflow-x-auto">
                        @forelse ($messages as $message)
                            <li
                                class="email-item px-24 py-16 d-flex gap-4 align-items-center border-bottom cursor-pointer bg-hover-neutral-200 min-w-max-content ">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400"
                                        wire:model="selectedEmails" type="checkbox" name="checkbox"
                                        value="{{ $message->id }}">
                                </div>
                                @if (is_null($message->read_at))
                                    <span class="unread-dot" style="color: red;">•</span>
                                @endif
                                @if ($selectedCategory !== 'trash')
                                    <button type="button"
                                        class="starred-button icon text-xl text-secondary-light line-height-1 d-flex {{ $message->is_starred ? 'active' : '' }}"
                                        wire:click="toggleStar({{ $message->id }})">
                                        <iconify-icon icon="ph:star"
                                            class="icon-outline line-height-1"></iconify-icon>
                                        <iconify-icon icon="ph:star-fill"
                                            class="icon-fill line-height-1 text-warning-600"></iconify-icon>
                                    </button>
                                @endif
                                <a href="{{ route('read-email', $message->id) }}"
                                    class="text-primary-light fw-medium text-md text-line-1 w-190-px">{{ $message->subject }}</a>
                                @if ($selectedCategory == 'sent' || $selectedCategory == 'draft')
                                    <a href="{{ route('read-email', $message->id) }}"
                                        class="text-primary-light fw-medium mb-0 text-line-1 max-w-740-px">{{ $message->to }}</a>
                                @else
                                    <a href="{{ route('read-email', $message->id) }}"
                                        class="text-primary-light fw-medium mb-0 text-line-1 max-w-740-px">{{ $message->from }}</a>
                                @endif
                                <span class="text-primary-light fw-medium min-w-max-content ms-auto">
                                    {{ $message->received_at
                                        ? $message->received_at->diffForHumans()
                                        : ($message->sent_at
                                            ? $message->sent_at->diffForHumans()
                                            : $message->created_at->diffForHumans()) }}
                                </span>
                            </li>
                        @empty
                            <li
                                class="email-item px-24 py-16 d-flex gap-4 align-items-center justify-content-center border-bottom cursor-pointer bg-hover-neutral-200 min-w-max-content ">
                                <span class="text-primary-light fw-medium min-w-max-content">No messages found in
                                    {{ ucfirst($selectedCategory) }}.</span>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div wire:loading>
        <x-loading></x-loading>
    </div>
</div>
