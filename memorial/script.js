// const handleSubmit = (event) => {
//   event.preventDefault();

//   const name = document.querySelector('input[name=Nome]').value;
//   const telefone = document.querySelector('input[name=Telefone]').value;
//   const email = document.querySelector('input[name=Email]').value;

//   let avaliacaoSelecionada = null;
//   const avaliacoes = document.querySelectorAll('input[name=aval]');
//   avaliacoes.forEach(avaliacao => {
//     if (avaliacao.checked) {
//       avaliacaoSelecionada = parseInt(avaliacao.value);
//     }
//   });

//   fetch('https://api.sheetmonkey.io/form/sRF7GmsWBqrBRCuA8nK9qa', {
//     method: 'post',
//     headers: {
//       'Accept': 'application/json',
//       'Content-Type': 'application/json',
//     },
//     body: JSON.stringify({
//       name,
//       telefone,
//       email,
//       avaliacao: avaliacaoSelecionada
//     }),
//   })
//     .then(response => {
//       if (response.ok) {
//         const popup = document.createElement('div');
//         popup.innerHTML = `<span style="font-size: 3rem;">ūüéČ</span><br>Obrigado pelo seu feedback!`;
//         popup.style.position = 'fixed';
//         popup.style.top = '50%';
//         popup.style.left = '50%';
//         popup.style.transform = 'translate(-50%, -50%)';
//         popup.style.padding = '2rem';
//         popup.style.background = 'white';
//         popup.style.border = '2px solid black';
//         popup.style.borderRadius = '20px';
//         popup.style.zIndex = '9999';
//         popup.style.textAlign = 'center';
//         document.body.appendChild(popup);

//         setTimeout(() => {
//           popup.remove();
//           window.location.href = "./index.html";
//         }, 3000);
//       } else {
//         throw new Error('Erro ao enviar formul√°rio');
//       }
//     })
//     .catch(error => {
//       console.error(error);
//     });
// };

// document.querySelector('form').addEventListener('submit', handleSubmit);


const handleSubmit = (event) => {
  event.preventDefault();

  // Obter valores dos campos do formul√°rio
  const name = document.querySelector('input[name=Nome]').value;
  const telefone = document.querySelector('input[name=Telefone]').value;
  const email = document.querySelector('input[name=Email]').value;

  let avaliacaoSelecionada = null;
  const avaliacoes = document.querySelectorAll('input[name=aval]');
  avaliacoes.forEach(avaliacao => {
    if (avaliacao.checked) {
      avaliacaoSelecionada = parseInt(avaliacao.value);
    }
  });

  // Registrar data e hora atual
  const dataHoraAtual = new Date().toLocaleString();

  // Enviar dados para a API
  fetch('https://api.sheetmonkey.io/form/sRF7GmsWBqrBRCuA8nK9qa', {
    method: 'post',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      name,
      telefone,
      email,
      avaliacao: avaliacaoSelecionada,
      dataHora: dataHoraAtual // Incluir data e hora no corpo da solicita√ß√£o
    }),
  })
  .then(response => {
    if (response.ok) {
      // Exibir mensagem de agradecimento e redirecionar ap√≥s 3 segundos
      const popup = document.createElement('div');
      popup.innerHTML = `<span style="font-size: 3rem;">🎉</span><br>Obrigado pelo seu feedback!`;
      popup.style.position = 'fixed';
      popup.style.top = '50%';
      popup.style.left = '50%';
      popup.style.transform = 'translate(-50%, -50%)';
      popup.style.padding = '2rem';
      popup.style.background = 'white';
      popup.style.border = '2px solid black';
      popup.style.borderRadius = '20px';
      popup.style.zIndex = '9999';
      popup.style.textAlign = 'center';
      document.body.appendChild(popup);

      setTimeout(() => {
        popup.remove();
        window.location.href = "./index.html";
      }, 3000);
    } else {
      throw new Error('Erro ao enviar formul√°rio');
    }
  })
  .catch(error => {
    console.error(error);
  });
};

// Adicionar ouvinte de evento ao formul√°rio
document.querySelector('form').addEventListener('submit', handleSubmit);
