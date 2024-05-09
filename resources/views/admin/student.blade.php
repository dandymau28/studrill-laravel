@extends('layouts.admin.app')

@push('styles')
<link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Students
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table" id="students">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Role</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@push('foot.scripts')
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script>

    $(document).ready(function() {
        $('#students').DataTable()
    });

</script>

@endpush
