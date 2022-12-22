<div class="card-body">
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('title') }}</label>
            <input type="text" class="form-control"  placeholder="{{ __('Digite um titulo') }}" name="title" />
        </div>
        <select name="module" >
            @foreach (\App\Models\Module::all() as $item)
                <option value={{$item->id}}>{{$item->title}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
    </form>
</div>
