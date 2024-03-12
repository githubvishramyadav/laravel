{{-- <div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div> --}}

<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control border border-danger">
        <span class="text-danger">
            {{-- @error('name')
                {{$message}}
            @enderror --}}
        </span>
</div>