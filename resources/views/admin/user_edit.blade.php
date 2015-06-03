    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User's data</h4>
            </div>
            <div class="modal-body">

                <form method="POST" id="user-edit-form" action="/lara/public/admin/user/{{ $user->id }}">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="password">New password: </label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>

                    <div class="form-group">
                        <label for="password">Repeat password: </label>
                        <input type="password" class="form-control" name="passwordConfirm" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="admin" value="1" {{ dTools::checked($user->admin) }}> Administrator
                        </label>
                    </div>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="user-edit-save">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
