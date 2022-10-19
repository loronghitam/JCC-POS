<div>
    <form class="user" action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text"
                    class="form-control form-control-user @if($errors->has('first_name')) is-invalid @elseif($first_name == null)  @else is-valid  @endif"
                    id="exampleFirstName" placeholder="First Name" wire:model="first_name" name="first_name">
                @error('first_name')

                {{ $message }}

                @enderror
            </div>
            <div class="col-sm-6">
                <input type="text"
                    class="form-control form-control-user @if($errors->has('last_name')) is-invalid @elseif($last_name == null)  @else is-valid @endif"
                    id="exampleLastName" placeholder="Last Name" wire:model="last_name" name="last_name">
                @error('last_name')

                {{ $message }}

                @enderror
            </div>
        </div>
        <div class="form-group">
            <input type="email"
                class="form-control form-control-user @if($errors->has('email')) is-invalid @elseif($email == null) @else is-valid @endif"
                id="exampleInputEmail" placeholder="Email Address" wire:model="email" name="email">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password"
                    class="form-control form-control-user @if($errors->has('password')) is-invalid @elseif($password == null) @else is-valid @endif"
                    id="exampleInputPassword" placeholder="Password" wire:model="password" name="password">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <div class="col-sm-6">
                <input type="password"
                    class="form-control form-control-user @if($errors->has('confirm_password')) is-invalid @elseif($confirm_password == null) @else is-valid @endif"
                    id="exampleRepeatPassword" placeholder="Repeat Password" wire:model="confirm_password"
                    name="confirm_password">
                @error('confirm_password')
               {{ $message }}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>
    </form>
</div>
