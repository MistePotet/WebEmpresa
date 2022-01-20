const hugo = document.getElementById('h')
const cris = document.getElementById('c')
const juan = document.getElementById('j')
const serg = document.getElementById('s')

const uno = () => {
    cris.style.display = 'none';
    juan.style.display = 'none';
    serg.style.display = 'none';
}

const dos = () => {
    hugo.style.display = 'none';
    juan.style.display = 'none';
    serg.style.display = 'none';
}

const tres = () => {
    cris.style.display = 'none';
    hugo.style.display = 'none';
    serg.style.display = 'none';
}

const cuatro = () => {
    cris.style.display = 'none';
    juan.style.display = 'none';
    hugo.style.display = 'none';
}

const uno_uno = () => {
    cris.style.display = 'inline';
    juan.style.display = 'inline';
    serg.style.display = 'inline';
}

const dos_dos = () => {
    hugo.style.display = 'inline';
    juan.style.display = 'inline';
    serg.style.display = 'inline';
}

const tres_tres = () => {
    cris.style.display = 'inline';
    hugo.style.display = 'inline';
    serg.style.display = 'inline';
}

const cuatro_cuatro = () => {
    cris.style.display = 'inline';
    juan.style.display = 'inline';
    hugo.style.display = 'inline';
}

hugo.addEventListener('click', uno)
cris.addEventListener('click', dos)
juan.addEventListener('click', tres)
serg.addEventListener('click', cuatro)
hugo.addEventListener('dblclick', uno_uno)
cris.addEventListener('dblclick', dos_dos)
juan.addEventListener('dblclick', tres_tres)
serg.addEventListener('dblclick', cuatro_cuatro)
