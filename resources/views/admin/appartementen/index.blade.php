@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Appartementen</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
          </div>
          <div class="card-body">
              @if($appartementen->count() > 0)
                <table id="example2" class="table">
                  <thead>
                  <tr>
                      <th>Appartement No.</th>
                      <th>Appartement Naam</th>
                      <th>Beschikbaarheid</th>
                      <th>Prijs</th>
                  </tr>
                  @foreach($appartementen as $appartementen)
                    <tr>
                      <td>{{ $appartementen->appartementen_id }}</td>
                      <td>{{ $appartementen->name }}</td>
                      <td>{{ $appartementen->status->name }}</td>
                      <td>{{ $appartementen->prijs }}</td>
                    </tr>
                  @endforeach
                  </thead>
                  </tfoot>
                </table>
                  @else
                    Er zijn geen Appartementen ingevoerd
              @endif
          </div>
      </div>
    </div>
<!-- /.content -->
              
@endsection     