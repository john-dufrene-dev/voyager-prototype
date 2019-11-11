<div class="toast" style="position: absolute; top: 10px; right: 10px; width:300px;" data-autohide="false">
    <div class="toast-body @if(session('flash_bg_toaster')) 
    bg-{{ session('flash_bg_toaster') }} @else bg-custom @endif">
        {{ session('flash_toaster') }}
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
</div>