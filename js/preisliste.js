async function ladePreisliste() {
  const response = await fetch('preisliste.xlsx');
  const data = await response.arrayBuffer();
  const workbook = XLSX.read(data, { type: 'array' });
  const sheet = workbook.Sheets[workbook.SheetNames[0]];
  const rows = XLSX.utils.sheet_to_json(sheet, { header: 1 });

  const container = document.getElementById('preisliste');
  let currentCategory = '';

  rows.forEach((row) => {
    if (row.length === 0 || !row[0]) return;

    if (row.length === 1 || (row[0] && !row[1])) {
      // Neue Kategorie-Überschrift
      currentCategory = document.createElement('h3');
      currentCategory.className = 'mt-4 text-primary';
      currentCategory.textContent = row[0];
      container.appendChild(currentCategory);
    } else {
      // Preiszeile
      const div = document.createElement('div');
      div.className = 'd-flex justify-content-between border-bottom py-2';
      div.innerHTML = `
        <span>${row[0]}</span>
        <strong>${row[1]} €</strong>
      `;
      container.appendChild(div);
    }
  });
}

ladePreisliste();
