import { useState } from 'react';

export default function Lugar({ lugar, esFavorito, cambiarFav }) {
  const [verDetalles, setVerDetalles] = useState(false);

  return (
    <li className="tarjeta">
      <img src={lugar.imagen} alt={lugar.lugar} className="tarjeta-img" />

      <div className="tarjeta-contenido">
        <span className="tarjeta-etiqueta">{lugar.categoria}</span>

        <h2 className="tarjeta-titulo">{lugar.lugar}</h2>

        <p className="tarjeta-ubicacion">{lugar.pais}</p>

        <p className="tarjeta-precio">${lugar.precio} MXN</p>

        
        {verDetalles && (
          <p className="tarjeta-descripcion">{lugar.descripcion}</p>
        )}

        <div className="tarjeta-botones">
          <button
  type="button"
  className="btn-favorito"
  onClick={cambiarFav}
>
  {esFavorito ? "❤️" : "🤍"}
</button>

          <button
            type="button"
            className="btn-detalles"
            onClick={() => setVerDetalles(!verDetalles)}
          >
            {verDetalles ? 'Ocultar detalles' : 'Ver detalles'}
          </button>
        </div>
      </div>
    </li>
  );
}