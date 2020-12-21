@extends('template')

@section('contenu')
    



@yield('production')
<div class="card-body">
    <h4 class="card-title">Vente & Stosk</h4>
    <!-- RANGEE PRINCIPALE -->
    <div class="default-tab">
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#production">PRODUCTION</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ventes">VENTES</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reporting">REPORTING</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#administration">ADMINISTRATION</a>
            </li>
        </ul>
        <div class="tab-content">
            <!--
                PRODUCTION
            -->
            <div class="tab-pane fade show active" id="production" role="tabpanel">
                <div class="p-t-15">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4>“La réussite d'une production repose sur l'attention prêtée aux détails.”</h4>-->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#marque">Marque</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categorie">Catégorie</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#produits">Produits</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stock">Stock</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="marque" role="tabpanel">
                                            <!-- MARQUE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des marques</h4>

                                                        
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_marques')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="Tout">Choisir une marques</option>
                                                        </select>
                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouvelle marque</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-marque">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="New brand">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="categorie">
                                            <!-- CATEGORIE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des catégories</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Choisir une catégorie</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_categories')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="Tout">Toute les marques</option>
                                                        </select>
                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouvelle catégorie</h4>
                                                        <form name="categorie" action="">
                                                            <div class="form-categorie">
                                                                <input type="text" class="form-control form-control-user" id="categorie" placeholder="New categorie">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="produits">
                                            <!-- PRODUITS -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des produits</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Millesime</th>
                                                                    <th scope="col">Marque</th>
                                                                    <th scope="col">Catégorie</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_produits')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allBrands">Choisir une marques</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allCategories">Choisir une catégorie</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Choisir une année</option>
                                                        </select>

                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouveau produit</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-produit">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="Nom du produit">
                                                            </div><br>
                                                            <select name="" id="" class="form-control form-control-user">
                                                                <option value="allBrands">Choisir une marques</option>
                                                            </select><br>
                                                            <select name="" id="" class="form-control form-control-user">
                                                                <option value="allCategories">Choisir une catégorie</option>
                                                            </select>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="stock">
                                            <!-- STOCK -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des stocks</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Stocks</th>
                                                                    <th scope="col">Magasin</th>
                                                                    <th scope="col">Production</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Trek</td>
                                                                    <td>23</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Surly</td>
                                                                    <td>18</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Heller</td>
                                                                    <td>134</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allBrands">Sélection marques</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allCategories">Sélection par catégorie</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par année</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par magasin</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par production</option>
                                                        </select>

                                                        <br><br>
                                                        <hr><br>
                                                        <h4>Nouvelle mise en stock</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-marque">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="New brand">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="ventes">
                <div class="p-t-15">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4>“Les yeux de celui qui achète sont dans la main de celui qui vend.”</h4>-->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#marqueBis">Marque</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categorieBis">Catégorie</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#produitsBis">Produits</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stockBis">Stock</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#client">Client</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vente">Vente</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="marqueBis" role="tabpanel">
                                            <!-- MARQUE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des marques</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Electra</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Haro</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Heller</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="Tout">Choisir une marques</option>
                                                        </select>
                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouvelle marque</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-marque">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="New brand">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>

                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="categorieBis">
                                            <!-- CATEGORIE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des catégories</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Choisir une catégorie</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Children Bicycles</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Comfort Bicycles</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Cruisers Bicycles</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="Tout">Toute les marques</option>
                                                        </select>
                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouvelle catégorie</h4>
                                                        <form name="categorie" action="">
                                                            <div class="form-categorie">
                                                                <input type="text" class="form-control form-control-user" id="categorie" placeholder="New categorie">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="produitsBis">
                                            <!-- PRODUITS -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des produits</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Millesime</th>
                                                                    <th scope="col">Marque</th>
                                                                    <th scope="col">Catégorie</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Trek</td>
                                                                    <td>2016</td>
                                                                    <td>Electra</td>
                                                                    <td>Children</td>
                                                                    <td>1000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Surly</td>
                                                                    <td>2016</td>
                                                                    <td>Haro</td>
                                                                    <td>Confort</td>
                                                                    <td>1000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Heller</td>
                                                                    <td>Ritchey</td>
                                                                    <td>2016</td>
                                                                    <td>Cruiser</td>
                                                                    <td>1000,00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allBrands">Choisir une marques</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allCategories">Choisir une catégorie</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Choisir une année</option>
                                                        </select>

                                                        <br><br>
                                                        <hr><br>
                                                        <h4>CREATION d'une nouveau produit</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-produit">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="Nom du produit">
                                                            </div><br>
                                                            <select name="" id="" class="form-control form-control-user">
                                                                <option value="allBrands">Choisir une marques</option>
                                                            </select><br>
                                                            <select name="" id="" class="form-control form-control-user">
                                                                <option value="allCategories">Choisir une catégorie</option>
                                                            </select>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="stockBis">
                                            <!-- STOCK -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des stocks</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Stocks</th>
                                                                    <th scope="col">Magasin</th>
                                                                    <th scope="col">Production</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Trek</td>
                                                                    <td>23</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Surly</td>
                                                                    <td>18</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Heller</td>
                                                                    <td>134</td>
                                                                    <td>Magasin</td>
                                                                    <td>Production</td>
                                                                    <td>1000.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <h4>SELECTION</h4>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allBrands">Sélection marques</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allCategories">Sélection par catégorie</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par année</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par magasin</option>
                                                        </select>
                                                        <select name="" id="" class="btn btn-light btn-block">
                                                            <option value="allYears">Sélection par production</option>
                                                        </select>

                                                        <br><br>
                                                        <hr><br>
                                                        <h4>Nouvelle mise en stock</h4>
                                                        <form name="brand" action="">
                                                            <div class="form-marque">
                                                                <input type="text" class="form-control form-control-user" id="brand" placeholder="New brand">
                                                            </div>
                                                            <br>
                                                            <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="client" role="tabpanel">
                                        <!-- CLIENTS -->
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="vente">
                                        <!-- VENTES -->
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="reporting">
                <div class="p-t-15">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4>“La mesure oblige à la clarté, à la fois à clarifier les idées, les stratégies et actions qui en découlent.”</h4>-->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#production">Production</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vente">Vente</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="production" role="tabpanel">
                                            <div class="p-t-15">
                                                <h4>This is home title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vente">
                                            <div class="p-t-15">
                                                <h4>This is profile title</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="administration">
                <div class="p-t-15">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4>“L'abondance est le fruit d'une bonne administration.”</h4>
                                <h4 class="card-title">Custom Tab 1</h4>-->
                                <!-- Nav tabs -->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#utilisateur">Utilisateur</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profil">Profil</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#historique">Historique</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="utilisateur" role="tabpanel">

                                        <!-- UTILISATEURS -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <h4>Liste des utilisateurs</h4>
                                                    <table class="table table-sm table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nom</th>
                                                                <th scope="col">Prénom</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Magasin</th>
                                                                <th scope="col">Responsable</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Otto</td>
                                                                <td>Mark</td>
                                                                <td>@mdo</td>
                                                                <td>0262000000</td>
                                                                <td>Santa-Cruz</td>
                                                                <td>Raymond</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                                <td>0262000000</td>
                                                                <td>Santa-Cruz</td>
                                                                <td>Raymond</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td colspan="2">Larry the Bird</td>
                                                                <td>@twitter</td>
                                                                <td>0262000000</td>
                                                                <td>Santa-Cruz</td>
                                                                <td>Raymond</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-xl-5">

                                                    <div class="card-body">
                                                        <h4>Création d'un utilisateur</h4>
                                                        <form class="user">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control form-control-user" id="first_name" aria-describedby="firstNameHelp" placeholder="Prénom">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control form-control-user" id="last_name" aria-describedby="lastNameHelp" placeholder="Nom">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control form-control-user" id="phone" aria-describedby="phoneHelp" placeholder="téléphone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirmer le mot de passe">
                                                            </div>

                                                            <div class="form-group">
                                                                <select id="magasin" class="form-control" value="{{ old('magasin') }}" required>
                                                                    <option selected>Magasin</option>
                                                                    <option>Santa Cruz</option>
                                                                    <option>Baldwin</option>
                                                                    <option>Rowlett</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select id="manager" class="form-control" value="{{ old('profil') }}" required>
                                                                    <option selected>Responsable direct</option>
                                                                    <option>Vendeur</option>
                                                                    <option>Administratif</option>
                                                                    <option>Préparateur</option>
                                                                    <option>Réparateur</option>
                                                                    <option>Direction</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <p class="form-control form-control-user">
                                                                    Personnel en activité &nbsp;? &nbsp;&nbsp;&nbsp;
                                                                    <label class="radio-inline"><input type="radio" name="active" checked> &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
                                                                    <label class="radio-inline"><input type="radio" name="active"> &nbsp; Non</label>
                                                                </p>
                                                            </div>

                                                            <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                                Enregistrer
                                                            </a>

                                                        </form>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="tab-pane fade" id="profil">
                                        <!-- PRROFILE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="historique">
                                        <!-- HISTORIQUE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <h4>This is brand</h4>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop