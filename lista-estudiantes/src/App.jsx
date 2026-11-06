import Estudiante from "./components/estudiante";
import "./App.css";

export default function App (){
  const estudiantes = [
    {id: 1, nombre: "Juan", carrera: "Sistemas"},
    {id: 2, nombre: "María", carrera: "Redes"},
    {id: 3, nombre: "Pedro", carrera: "Comercio"},
  ];
  return (
    <main className="contenedor">

      <h1>Listado de estudiantes</h1>
      <form> 
        <input type="text" placeholder="Escribe el nombre" />
        <input type="text" placeholder="Carrera del estudiante" />
        <button type="submit"> Agregar </button>  
      </form>

      <h2>Estudiantes registrados</h2>
      <ul>
        {estudiantes.map((estudiante) => (
          <Estudiante 
          key={estudiante.id} 
          estudiante={estudiante} 
          />
        ))}
      </ul>

      <p> Total de estudiantes: {estudiantes.length} </p>
    </main>
    
  );

}