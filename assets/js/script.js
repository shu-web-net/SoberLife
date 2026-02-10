    function updateCounter() {
      const dateInput = document.getElementById('start-date').value;
      if (!dateInput) return;
      const startDate = new Date(dateInput);
      const today = new Date();
      const diffTime = Math.abs(today - startDate);
      const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
      document.getElementById('counter').innerText = diffDays;
    }
    window.onload = () => {
      const defaultDate = new Date();
      defaultDate.setDate(defaultDate.getDate() - 30);
      document.getElementById('start-date').value = defaultDate.toISOString().split('T')[0];
      updateCounter();
    }