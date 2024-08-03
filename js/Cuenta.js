document.addEventListener('DOMContentLoaded', function() {
    fetch('Data/Cuenta.json')
        .then(response => response.json())
        .then(data => {
            const list = document.getElementById('observaciones-list');
            data.forEach(obs => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${obs.observacion}</td>
                    <td>${obs.tipo}</td>
                    <td>$${obs.monto}</td>
                    <td>${obs.fecha}</td>
                `;
                list.appendChild(row);
            });
        });
});
