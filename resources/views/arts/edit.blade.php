@extends('backend_layouts.app')
 
@section('content')

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Edit</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Form</h3>
                                        </div>
                                        <hr>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form action="{{ route('arts.update',$art->id) }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                                             @csrf
                                             @method('PUT')
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $art->name }}" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category</label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $art->category }}" placeholder="category">
                                            </div>
                                                     
                                                            <div class="form-group">
                                                                <label for="cc-payment" class="control-label mb-1">Source</label>
                                                                <input id="cc-pament" name="source" type="file" class="form-control" value="{{ $art->source }}" placeholder="source">
                                                            </div>
                                                            <div>
                                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                                    <span id="payment-button-amount">Submit</span>
                                                                </button>
                                                            </div>
                                                   
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>

@endsection