import { useState } from 'react'
import './App.css'
import Lugar from './components/Lugar'

function App() {
 const lugares = [
    {
      id: 1,
      lugar: "Cancún",
      pais: "México",
      precio: "6000",
      categoria: "Playa",
      imagen: "/img/CANCUN.webp",
      descripcion: "Visita la smejores playas y disfruta del ambiente caribeño."
    },
    {
      id: 2,
      lugar: "París",
      pais: "Francia",
      precio: "20000",
      categoria: "Cultura",
      imagen: "/img/PARIS.webp",
      descripcion: "Conoce la Torre Eiffel y disfruta de sus cafés, museos y arquitectura clásica."
    },
    {
      id: 3,
      lugar: "Querétaro",
      pais: "México",
      precio: "5000",
      categoria: "Turismo",
      imagen: "/img/QUERETARO.jpg",
      descripcion: "Recorre su centro histórico colonial y visita sus famosos arcos."
    },
    {
      id: 4,
      lugar: "Chiapas",
      pais: "México",
      precio: "4000",
      categoria: "Turismo",
      imagen: "/img/CHIAPAS.webp",
      descripcion: "Visita zonas rodeadas de selva y cascadas."
    }
  ];

  const [favoritos, setFavoritos] = useState([]);
  const [busqueda, setBusqueda] = useState("");
  const [soloFavoritos, setSoloFavoritos] = useState(false);
  const [cargando, setCargando] = useState(false);

  const alternarFavoritos = () => {
    setCargando(true);
    setTimeout(() => {
      setSoloFavoritos((prev) => !prev);
      setCargando(false);
    }, 2000);
  };

  const cambiarFav = (id) => {
    if (favoritos.includes(id)) {
      setFavoritos(favoritos.filter((favId) => favId !== id));
    } else {
      setFavoritos([...favoritos, id]);
    }
  };

  const lugaresFiltrados = lugares.filter((item) => {
    const coincideTexto =
      item.lugar.toLowerCase().includes(busqueda.toLowerCase()) ||
      item.pais.toLowerCase().includes(busqueda.toLowerCase());

    const coincideFav = soloFavoritos ? favoritos.includes(item.id) : true;

    return coincideTexto && coincideFav;
  });

  return (
    <>
      <header className="encabezado">
        <div className="cont-header">
          <h1 className="titulo">TravelApp</h1>

          <nav className="navegacion">
            <h3>Inicio</h3>
            <h3>Destinos</h3>
            <h3>Favoritos</h3>
          </nav>
        </div>
      </header>

      <main>
        <div className="titulo-main">
          <h1 className="texto-main">Descrubre tu destino</h1>
          <p className="parrafo-main">Explora lugares nuevo y planea tus próximas vacaciones</p>
        </div>

        <div className="favoritos">
          <h1 className="titulo-favoritos">Destinos favoritos.</h1>
          <p className="contador">{favoritos.length}</p>
        </div>

        <form onSubmit={(e) => e.preventDefault()}>
          <h1 className="titulo-destinos">Busca destinos turísticos</h1>
          <div className="busqueda">
            <input
              className="input"
              type="text"
              placeholder="Escribe el destino"
              value={busqueda}
              onChange={(e) => setBusqueda(e.target.value)}
            />
            <button
              className="btnn"
              type="button"
              onClick={alternarFavoritos}
              disabled={cargando}
            >
              {cargando
                ? "Cargando..." : soloFavoritos
                ? "Mostrar todos" : "Mostrar favoritos"}
            </button>
          </div>
        </form>

        <div className="tarjetas">
          {cargando ? (
            <div className="loader-contenedor">
              <div className="spinner"></div>
              <p>Cargando destinos...</p>
            </div>
          ) : (
            <ul>
              {lugaresFiltrados.map((lugar) => (
                <Lugar
                  key={lugar.id}
                  lugar={lugar}
                  esFavorito={favoritos.includes(lugar.id)}
                  cambiarFav={() => cambiarFav(lugar.id)}
                />
              ))}
            </ul>
          )}
        </div>
      </main>
    </>
  );
}

export default App