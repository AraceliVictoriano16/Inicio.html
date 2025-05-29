document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("fvalida");

  form.addEventListener("submit", (e) => {
    const nombre = form.nombre.value.trim();
    const visitas = form.visitas.value.trim();
    const lugar = form.lugar.value.trim();
    const servicios = form.servicios.value.trim();
    const opinion = form.opinion.value.trim();
    const experiencia = form.experiencia.value.trim();
    const sugerencias = form.sugerencias.value.trim();

    let mensaje = "";

    if (nombre === "") mensaje += "• Nombre\n";
    if (visitas === "") mensaje += "• Visitas\n";
    if (lugar === "") mensaje += "• Lugar\n";
    if (servicios === "") mensaje += "• Servicios\n";
    if (opinion === "") mensaje += "• Opinión\n";
    if (experiencia === "") mensaje += "• Experiencia\n";
    if (sugerencias === "") mensaje += "• Sugerencias\n";

    if (mensaje !== "") {
      alert("Por favor, completa los siguientes campos:\n\n" + mensaje);
      e.preventDefault(); // Detiene el envío del formulario
      return;
    }

    alert("Gracias por completar la encuesta.");
  });
});



