from flask import Blueprint 

controladorAlumnoBP = Blueprint('controladorAlumno', __name__)

""" Ruta de arranque """
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"


""" Ruta para insert """
@controladorAlumnoBP.route('/guardarAlumno', methods = ['POST'])
def guardar ():
    return 'Se guardó el alumno'

""" Ruta para consultar todo"""
@controladorAlumnoBP.route('/consultatodo')
def consultatodo ():
    return 'Se consultó todo'

""" Ruta para actualizar"""
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar ():
    return 'Se actualizó el alumno'

""" Ruta para eliminar"""
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar ():
    return 'Se eliminó el alumno'