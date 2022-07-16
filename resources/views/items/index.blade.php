@extends('layouts.main')

@section('title', 'Items')

@section('content')
<section class="content py-4">
    <div class="container-fluid">
        <a href="{{route('items.create')}}" class="btn btn-primary mb-2">Add Item</a>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Items</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Name
                                    </th>
                                    <th style="width: 30%">
                                        Category
                                    </th>
                                    <th>
                                        Weight
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Price
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Description
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        {{$item->categories}}
                                    </td>
                                    <td class="project_progress">
                                        {{$item->weight}}
                                    </td>
                                    <td class="project-state">
                                        {{$item->price}}
                                    </td>
                                    <td>
                                        {{$item->description}}
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('items.edit', $item)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%">No data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
