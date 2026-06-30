{{ $slot }}
<div style="width: 100%; background: red;  ">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" value="{{ old('name') }}" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" value="{{ old('telefone') }}" class="{{ $classe }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" value="{{ old('email') }}" class="{{ $classe }}">
    <br>
    <select class="{{ $classe }}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : '' }}> {{ $motivo_contato }} </option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }} {{-- @if(old('mensagem') != '') {{ old('mensagem') }} @else Preencha aqui a sua mensagem@endif --}}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
