<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Annonces</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Trouver des employés</h5>

            <!-- General Form Elements -->
            <form>

              <!-- Champ Département corrigé -->
              <div class="row mb-3">
                <label for="inputDepartment" class="col-sm-2 col-form-label">Département</label>
                <div class="col-sm-10">
                  <select id="inputDepartment" class="form-select">
                    <option value="">Sélectionner un département</option>
                    <option value="informatique">Informatique</option>
                    <option value="gestion">Gestion</option>
                    <option value="marketing">Marketing</option>
                    <option value="comptabilite">Comptabilité</option>
                    <option value="ressources_humaines">Ressources Humaines</option>
                    <option value="finance">Finance</option>
                    <option value="juridique">Juridique</option>
                    <option value="logistique">Logistique</option>
                  </select>
                </div>
              </div>

              <!-- Champ Limite Date -->
              <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Limite Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputDate">
                </div>
              </div>

              <!-- Champ Âge -->
              <div class="row mb-3">
                <label for="inputAge" class="col-sm-2 col-form-label">Âge</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="inputAge" placeholder="Âge minimum">
                  entre 
                  <input type="number" class="form-control" placeholder="Âge maximum">
                </div>
              </div>

              <!-- Champ Motif -->
              <div class="row mb-3">
                <label for="inputMotif" class="col-sm-2 col-form-label">Motif</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputMotif" style="height: 100px"></textarea>
                </div>
              </div>

              <!-- Diplôme -->
              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Diplôme</legend>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                          Licence
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                          Master
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label class="form-check-label" for="gridCheck3">
                          Doctorat
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Compétence -->
              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Compétence</legend>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="comp1">
                        <label class="form-check-label" for="comp1">
                          Programmation
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="comp2">
                        <label class="form-check-label" for="comp2">
                          Gestion de projet
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="comp3">
                        <label class="form-check-label" for="comp3">
                          Design
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Bouton de soumission -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
