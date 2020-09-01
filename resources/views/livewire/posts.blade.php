<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if($updateMode)
    @include('livewire.update')
@else
    @include('livewire.create')
@endif

<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Body</th>
            <th width="150px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
            <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<form>
{{-- <div class="form-group">
    <label for="exampleFormControlInput1">Title:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<div class="form-group">
    <label for="exampleFormControlInput2">Body:</label>
    <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body"></textarea>
    @error('body') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
</div> --}}
