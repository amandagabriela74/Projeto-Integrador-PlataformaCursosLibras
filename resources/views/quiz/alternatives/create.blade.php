create alternative
<div class="card-body">
    <form action="{{ route('alternatives.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="alternative">{{ __('Alternativa') }}</label>
            <input type="text" class="form-control"  placeholder="{{ __('Digite uma alternativa') }}" name="alternative" />
        </div>
        <div>
            <label for="correct">{{ __('Correct') }}</label>
            <select name="correct" id="">
                <option value="1" name="true">True</option>
                <option value="0" name="false">False</option>
            </select>
        </div>

        <label for="question">{{ __('Question') }}</label>
        <select name="question" >
            @foreach (\App\Models\Question::all() as $item)
                <option value={{$item->id}}>{{$item->question}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
    </form>
</div>
