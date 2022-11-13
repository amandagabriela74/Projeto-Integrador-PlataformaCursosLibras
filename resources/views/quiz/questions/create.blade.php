questions create
<div class="card-body">
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">{{ __('question') }}</label>
            <input type="text" class="form-control"  placeholder="{{ __('Digite uma questão') }}" name="question" />
        </div>
        <select name="quiz" >
            @foreach (\App\Models\Quiz::all() as $item)
                <option value={{$item->id}}>{{$item->title}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
    </form>
</div>
