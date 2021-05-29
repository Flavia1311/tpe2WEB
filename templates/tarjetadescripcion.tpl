<div class="container_tarjeta">

    <div class="card_descripcion">
        
        <div class="contenido_descripcion">
            <h3>Platos: {$plato->nombre}</h3>
            <p class="info"><span>Nacionalidad:</span> {$platos->nacionalidad}</p>
            <p class="info"><span>Descripcions:</span> {$plato->descripcion}</p>

            {if $username}
                <a href="formEditarPlato/{$destino->id}">Editar</a>
                <a href="eliminarPlato/{$destino->id}">Eliminar</a>
            {/if}
        </div>
    </div>

</div>