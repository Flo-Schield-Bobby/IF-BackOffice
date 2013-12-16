                <div class="bs-docs-section">
                    <div class="page-header">
                        <h1 id="map">Carte (c'est pas terminé)</h1>
                    </div>
                    <p>Pour ajouter, éditer et supprimer des éléments sur la carte du festival.</p>
                    <p>Ils seront affichées sur la carte dans l'application, avec possibilité de filtrer.</p>

                    <div id="onDeleteMapItemAlert" class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>L'élément a bien été supprimé !</h4>
                        <p>(C'est trop tard, il n'est plus possible de le récupérer. )</p>
                    </div>

                    <table id="mapItem-table" class="table table-hover">
                    </table>

                    <!-- Button to trigger modal -->
                    <a id="addMapItemTriggerModal" data-toggle="modal" href="#addMapItemModal" class="btn btn-primary btn-lg">Ajouter un élément</a>

                    <!-- ADD Modal -->
                    <div class="modal fade" id="addMapItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Ajouter un élément</h4>
                                </div>
                                <form role="form">
                                    <div class="modal-body">
                                        <input id="newLabel" type="text" class="form-control" placeholder="Label">
                                        <br />
                                        <input id="newX" type="text" class="form-control" placeholder="Coordonnée X">
                                        <br />
										<input id="newY" type="text" class="form-control" placeholder="Coordonnée Y">
                                        <br />
										<input id="newInfoId" type="text" class="form-control" placeholder="InfoId">
                                        <br />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-primary" id="addMapItemButton">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <!-- EDIT Modal -->
                    <div class="modal fade" id="editMapItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modifier un élément</h4>
                                </div>
                                <form role="form">
                                    <div class="modal-body">
                                        <input id="id" type="hidden" value="">
                                        <input id="label" type="text" class="form-control" placeholder="Label">
                                        <br />
                                        <input id="x" type="text" class="form-control" placeholder="Coordonnée X">
                                        <br />
										<input id="y" type="text" class="form-control" placeholder="Coordonnée Y">
                                        <br />
										<input id="infoId" type="text" class="form-control" placeholder="InfoId">
                                        <br />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-primary" id="editMapItemButton">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>