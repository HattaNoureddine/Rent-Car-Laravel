@extends('master')
@section('content')
<!-- Content wrapper -->
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">effectuer </span> une contrat de loyer</h4>
      <a href="/responsable/reservations">Voir tout les reservation</a>
      <!-- Basic Layout -->
      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
        
            <div class="card-body">
              <form action="/reservation/store" method="POST">
                @csrf

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Date debut</label>
                  <input type="date" name="date_debut" class="form-control" id="basic-default-company" placeholder="date debut" />
                </div>
            
                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Date fin</label>
                  <input
                    type="date"
                    id="basic-default-phone"
                    class="form-control phone-mask"
                    placeholder="date fin"
                    name="date_fin"
                  />
                </div>
                
                <button type="submit" class="btn btn-primary">Send</button>
         
            </div>
          </div>
        </div>
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <input type="hidden" value="{{ $voiture->id }}" name="voiture">
                    <label class="form-label" for="basic-icon-default-fullname">Client</label>
                    <select class="form-control form-control-sm" name="client" id="">
                      @foreach ($clients as $item)
                          <option value="{{ $item->id }}">{{ $item->nom }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Remarque</label>
                    <textarea
                      id="basic-default-message"
                      class="form-control"
                      placeholder="remarque?"
                      name="remarque"
                    ></textarea>
                  </div>
                <div class="mb-3">
                  <div class="input-group input-group-merge">
            
                    <input
                      type="hidden"
                      id="basic-icon-default-phone"
                      class="form-control phone-mask"
                      placeholder="Prix par jour"
                      aria-label="658 799 8941"
                      aria-describedby="basic-icon-default-phone2"
                      name="prix_par_jour"
                      value="{{ $total }}"
                    />
                  </div>
                </div>
             
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
@endsection