<h1>Crea Nuovo Progetto</h1>

<form method="POST" action="{{ route('admin.projects.store') }}">
    @csrf
    <div>
        <label for="name">Titolo</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type_id">Tipo di Progetto</label>
        <select name="type_id" id="type_id" class="form-control">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>
        @error('type_id')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Salva</button>
</form>
