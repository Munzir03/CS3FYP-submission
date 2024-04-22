const options = {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json',
      'X-API-Key': '215ba891f61a3e148be2e4e8f9e7624bb1902b8379de4d5925e9739e1cac6677'
    }
  };
  
  // Fetch data from the specified API endpoint
  fetch('https://api.peopledatalabs.com/v5/autocomplete?field=skill&size=100&pretty=false', options)
    .then(response => response.json())
    .then(data => {
      // Create a new instance of autoCompleteJS for the skills input field
      const autoCompleteSkills = new autoComplete({
        placeHolder: "Skills...",
        data: {
          src: data.data.map(item => item.name),
          cache: true,
        },
        resultsList: {
          element: (list, data) => {
            if (!data.results.length) {
              const message = document.createElement("div");
              message.setAttribute("class", "no_result");
              message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
              list.prepend(message);
            }
          },
          noResults: true,
        },
        resultItem: {
          highlight: true,
        },
        events: {
          input: {
            selection: (event) => {
              const selection = event.detail.selection.value;
              autoCompleteSkills.input.value = selection;
            }
          }
        }
      });
  
      // Link the autoCompleteSkills instance to the input field with ID 'skills'
     
    })
    .catch(err => console.error(err));