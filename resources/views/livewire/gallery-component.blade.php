<div class="card card-outline card-light">
  <div class="card-header p-2" {{-- style="background-color: #d0d0e8 !important;" --}} >
    <h3 class="card-title mt-1">
      Gallery
    </h3>
    <div class="card-tools mx-3">
      <button class="btn btn-sm btn-outline-info px-3" wire:click="enterCreateMode">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>


  <div class="card-body p-0">

    @if ($createMode)
      @livewire('gallery-create')
    @endif


  
    @if (false)
    @if ($displayMode)
      @livewire('medical-test-detail', ['medicalTest' => $displayedMedicalTest])
    @endif

    @if ($agentDisplayMode)
      @livewire('agent-detail', ['agent' => $displayingAgent])
    @endif

    @if ($updateMode)
      @livewire('medical-test-update', ['medicalTest' => $updatingMedicalTest])
    @endif

  
    @endif
    @livewire('gallery-list')
  
    {{--
    @if ($editMode)
      @livewire('medical-test-edit')
    @endif
    --}}

  @if (false)
  @if ($deleteMode)
    <div class="modal enter" tabindex="-1" role="dialog" data-backdrop="static" id="todoDeleteConfirmModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="fas fa-exclamation-triangle text-danger mr-2"></i>
              Confirm Delete
            </h5>
            {{-- TODO --}}
            @if (false)
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
              <i class="fas fa-times"></i>
            </button>
            @endif
          </div>
    
          <div class="modal-body p-0">
            <div class="p-3">
              <p>
                Do you really want to delete ?
              </p>
              <div class="row text-muted">
                <div class="col">
                  <strong>
                    Facility ID
                  </strong>
                  <br />
                  {{ $deletingFacility->facility_id }}
                </div>
                <div class="col">
                  <strong>
                    Name
                  </strong>
                  <br />
                  {{ $deletingFacility->name }}
                </div>
              </div>
            </div>

            <div class="mx-2 mb-3">
              <button wire:click="deleteFacility({{ $deletingFacility }})" class="btn btn-sm btn-danger mr-3" data-dismiss="modal">Delete</button>
              <button wire:click="exitDeleteMode" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
    
    
          </div>
        </div>
      </div>
    </div>
    
    <script>
        /* Show the modal on load */
        $(document).ready(function () {
           $('#todoDeleteConfirmModal').modal('show');
        });
    </script>

  @endif
  @endif


  </div>

</div>
