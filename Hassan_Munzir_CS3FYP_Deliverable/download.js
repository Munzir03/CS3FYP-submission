function downloadPDF() {
    
    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const education = document.getElementById("qualification").value;
    const grade = document.getElementById("grade").value; // Get grade from dropdown
    const university = document.getElementById("university").value; // Get university
    const company = document.getElementById("company").value; 
    const role = document.getElementById("autoComplete").value; 
    const experience = document.getElementById("experience").value;
    const skills = document.getElementById("skills").value;
    const references = document.getElementById("references").value;
    const hobbies = document.getElementById("hobbies").value; 
    const datefrom = document.getElementById("datefrom").value; // Get date from
    const dateto = document.getElementById("dateto").value; // Get date to

    let workExperiences = document.querySelectorAll('.work-experience');

    // Construct URL with query parameters
    const url = `template1.html?name=${name}&email=${email}&phone=${phone}&education=${education}&grade=${grade}&university=${university}&company=${company}&autoComplete=${role}&experience=${experience}&
    skills=${skills}&references=${references}&hobbies=${hobbies}&datefrom=${datefrom}&dateto=${dateto}&experiences=${workExperiences}`;

    // Redirect to template.html with form data
    window.location.href = url;
    
}

// Similar changes in other downloadPDF functions...


function downloadPDF2() {
    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const education = document.getElementById("qualification").value;
    const grade = document.getElementById("grade").value; // Get grade from dropdown
    const university = document.getElementById("university").value; // Get university
    const company = document.getElementById("company").value; 
    const role = document.getElementById("autoComplete").value; 
    const experience = document.getElementById("experience").value;
    const skills = document.getElementById("skills").value;
    const references = document.getElementById("references").value;
    const hobbies = document.getElementById("hobbies").value; 
    const datefrom = document.getElementById("datefrom").value; // Get date from
    const dateto = document.getElementById("dateto").value; // Get date to

    // Construct URL with query parameters
    const url = `template2.html?name=${name}&email=${email}&phone=${phone}&education=${education}&grade=${grade}&university=${university}&company=${company}&autoComplete=${role}&experience=${experience}&skills=${skills}&references=${references}&hobbies=${hobbies}&datefrom=${datefrom}&dateto=${dateto}`;

    // Redirect to template.html with form data
    window.location.href = url;
}




function downloadPDF3() {
    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const education = document.getElementById("qualification").value;
    const grade = document.getElementById("grade").value; // Get grade from dropdown
    const university = document.getElementById("university").value; // Get university
    const company = document.getElementById("company").value; 
    const role = document.getElementById("autoComplete").value; 
    const experience = document.getElementById("experience").value;
    const skills = document.getElementById("skills").value;
    const references = document.getElementById("references").value;
    const hobbies = document.getElementById("hobbies").value; 
    const datefrom = document.getElementById("datefrom").value; // Get date from
    const dateto = document.getElementById("dateto").value; // Get date to

    // Construct URL with query parameters
    const url = `template3.html?name=${name}&email=${email}&phone=${phone}&education=${education}&grade=${grade}&university=${university}&company=${company}&autoComplete=${role}&experience=${experience}&skills=${skills}&references=${references}&hobbies=${hobbies}&datefrom=${datefrom}&dateto=${dateto}`;

    // Redirect to template.html with form data
    window.location.href = url;
}

// Similar changes in other downloadPDF functions...


function downloadPDF4() {
    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const education = document.getElementById("qualification").value;
    const grade = document.getElementById("grade").value; // Get grade from dropdown
    const university = document.getElementById("university").value; // Get university
    const company = document.getElementById("company").value; 
    const role = document.getElementById("autoComplete").value; 
    const experience = document.getElementById("experience").value;
    const skills = document.getElementById("skills").value;
    const references = document.getElementById("references").value;
    const hobbies = document.getElementById("hobbies").value; 
    const datefrom = document.getElementById("datefrom").value; // Get date from
    const dateto = document.getElementById("dateto").value; // Get date to

    // Construct URL with query parameters
    const url = `template4.html?name=${name}&email=${email}&phone=${phone}&education=${education}&grade=${grade}&university=${university}&company=${company}&autoComplete=${role}&experience=${experience}&skills=${skills}&references=${references}&hobbies=${hobbies}&datefrom=${datefrom}&dateto=${dateto}`;

    // Redirect to template.html with form data
    window.location.href = url;
}

// Similar changes in other downloadPDF functions...


function exportPDF() {
    const element = document.getElementById("cv-section");
    const options = {
        margin: 10,
        filename: 'curriculum_vitae.pdf',
        image: { type: 'jpeg', quality: 4 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };

    html2pdf().from(element).set(options).save();
}




