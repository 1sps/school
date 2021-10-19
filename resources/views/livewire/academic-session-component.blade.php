<div class="card card-outline card-light">
  <div class="card-header p-2">
    <h3 class="card-title mt-1">
      Academic Session
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">

    @if ($createMode)
      @livewire ('academic-session-create')
    @elseif ($displayMode)
      @livewire ('academic-session-display', ['academicSession' => $displayingAcademicSession,])
    @elseif ($updateMode)
      @livewire ('academic-session-update', ['academicSession' => $updatingAcademicSession,])
    @else
      @livewire ('academic-session-list')
    @endif

    @if ($deleteMode)
      @livewire ('academic-session-delete-confirm', ['deletingAcademicSession' => $deletingAcademicSession,])
    @endif

  </div>
</div>
