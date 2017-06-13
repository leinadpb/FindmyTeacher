<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"
                    id="favoritesModalLabel">Calificar a este profesor</h4>
            </div>
            <form action="" method="" class="form-horizontal">
                <div class="modal-body">
                    <p>
                        0 - Menor rating <br>
                        10 - Mayor rating
                    </p>

                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Forma de ser del profesor</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Dificultad de los exámenes</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Duración de las clases</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Comprensión al estudiante</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Forma de tratar al estudiante</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Dominio de los temas de clase</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mySegment">
                                <div class="col-xs-8">
                                    <label>Puntualidad</label>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$teacher->id}}">
                            {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Cerrar</button>
                    <span class="pull-right">
                      <button type="submit" class="btn btn-primary">
                        Calificar
                      </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>