

 <div id="call-create-container" class="col-md-6 offset-md-3">
     <center>
     <h1 id="leteiro">Abrir Reclamação</h1>
     </center>
    <form action="/cadastro" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Tipo:</label>
                <select name="problems" id="problems" class="select" required style="width: 382px;background-color: #f5f5f5;padding: 10px; border: 0px solid">
                    <option value="" disabled selected >Selecione...</option>
                    <option value="Violencia">Violencia</option>
                  
                </select>
        </div>

        <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" class="form-control " id="title" name="title" placeholder="nome do chamado" required>
        </div>

        <div class="form-group">
            <label for="date">Data de ocorrido:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Local paro o reparo" required>
        </div>

        <div class="form-group">
            <label for="title">O local é privado ?</label>
                <select name="private" id="private" class="select" required style="width: 382px;background-color: #f5f5f5;padding: 10px; border: 0px solid">
                    <option value="" disabled selected >Selecione...</option>
                    <option value="Sim">Sim</option>
                    <option value="Nao">Não</option>
                </select>
        </div>

        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" required placeholder="Descreva o problema"></textarea>
         </div>
         
        <br>
        <div class="form-group">
        {{-- <button type="button" class="btn btn-outline-danger" href="/">Cancelar</button> --}}
        <input type="submit" class="btn btn-outline-primary" value="Abrir reclamação">
        </div>
    </div>


    </form>
 </div>

 <style>
     #call-create-container {
     padding: 40px;
     margin: 30px auto;
     width: 466px;
     /* padding: 1em; */
     border: 1px solid rgb(82, 80, 80);
     border-radius: 1em;
 }
 
 #call-create-container label {
     font-weight: bold;
     padding: 5px;
 }
 
 #call-create-container input,
 #call-create-container select,
 #call-create-container textarea {
     font-size: 12px;
 }
 
 #call-create-container-comentario {
     padding: 40px;
     margin: 30px auto;
     width: 466px;
     /* padding: 1em; */
     border: 1px solid rgb(82, 80, 80);
     border-radius: 1em;
 }
 
 #call-create-container-comentario label {
     font-weight: bold;
     padding: 5px;
 }
 
 #call-create-container-comentario input,
 #call-create-container-comentario select,
 #call-create-container-comentario textarea {
     font-size: 12px;
 }
 
 #call-create-container-chamado {
     padding: 40px;
     margin: 30px auto;
     /* padding: 1em; */
     border: 1px solid rgb(82, 80, 80);
     border-radius: 1em;
 }
 
 #call-create-container-chamado label {
     font-weight: bold;
     padding: 5px;
 }
 
 #call-create-container-chamado input,
 #call-create-container-chamado select,
 #call-create-container-chamado textarea {
     font-size: 12px;
 }
 </style>