@if (session('success'))
    <div class="alert alert-success">
        <strong>Succès!</strong> {{ session('success') }}
    </div>
@endif
