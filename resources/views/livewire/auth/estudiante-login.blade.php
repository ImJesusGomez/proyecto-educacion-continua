<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit="login">
            <div>
                <label for="expediente">Expediente:</label>
                <input type="text" id="expediente" wire:model="expediente">
                @error('expediente')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="nip">NIP:</label>
                <input type="password" id="nip" wire:model="nip">
                @error('nip')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>
