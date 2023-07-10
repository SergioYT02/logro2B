</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  >Close</button>
@if (count($errors->all()) === 0)
   <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @if($Id==null)wire:click='store '@else wire:click='update("{{$Id}}")'@endif>Save changes</button>

@endif
 
  
</div> z
</div>
</div>
</div>