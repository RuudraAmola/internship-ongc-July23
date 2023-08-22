function validation()
{

    const recpTypes = document.getElementsByName('recipeint');
    const moduleCheckboxes = document.getElementsByName('modules');
    let isRecpSelected = false;
    let isModSelected = false;

    for (const radio of recpTypes) {
        if (radio.checked) {
            isRecpSelected = true;
            break;
        }
    }
    for (const checkbox of moduleCheckboxes) {
        if (checkbox.checked) {
            isHobbiesSelected = true;
            break;
        }
    }

    if (!isRecpSelected) {
        document.getElementById('recp').innerHTML ="** Please select a Recipient.";
		return false;
    }
    if (!isModSelected) {
        document.getElementById('module').innerHTML ="** Please select a Module.";
		return false;
    }

			var purpose= document.getElementById('purpose').value;
			var cpfno = document.getElementById('cpf').value;
			var name = document.getElementById('name').value;
            var designation = document.getElementById('designation').value;
            var department = document.getElementById('department').value;

            var ipAddress = document.getElementById('ip-address').value;
            const ipPattern = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;

            var eSignature = document.getElementById('signature').value;
            const matchSign = name.toLowerCase().replace(/\s/g, ''); // Convert to lowercase and remove spaces

            var Date = document.getElementById('date').value;
            var location = document.getElementById('location').value;

			var mobileNumber = document.getElementById('mobile').value;
			const phnPattern = /^[789]\d{9}$/;

            var lastPosting = document.getElementById('last-posting-location').value;
            var recommendation = document.getElementById('recommendation').value;

			if(purpose == ""){
				document.getElementById('prp').innerHTML ="** Please fill this field";
				return false;
			}
			if((purpose.length <= 200)) {
				document.getElementById('prp').innerHTML ="** Text length too long";
				return false;	
			}


            if(cpfno == ""){
				document.getElementById('cpfno').innerHTML ="** Please fill this field";
				return false;
			}
			if(isNaN(cpfno)){
				document.getElementById('cpfno').innerHTML ="** Only numerics are allowed";
				return false;
			}

			if(name == ""){
				document.getElementById('username').innerHTML ="** Please fill this field";
				return false;
			}
			
            if(designation == ""){
				document.getElementById('desig').innerHTML ="** Please fill this field";
				return false;
			}

			if(department == ""){
				document.getElementById('dept').innerHTML ="** Please fill this field";
				return false;
			}

            if(ipAddress == ""){
				document.getElementById('ipadd').innerHTML ="** Please fill this field";
				return false;
			}
            if (!ipPattern.test(ipAddress)) {
                document.getElementById('ipadd').innerHTML ="** Invalid IP Address";
            }

            if(eSignature == ""){
				document.getElementById('esign').innerHTML ="** Please fill this field";
				return false;
			}
            if (eSignature != name) {
                document.getElementById('esign').innerHTML ="** Enter in lower case, no spaces";
				return false;
            }

            if(Date == ""){
				document.getElementById('applydate').innerHTML ="** Please fill this field";
				return false;
			}

            if(location == ""){
				document.getElementById('loc').innerHTML ="** Please fill this field";
				return false;
			}

            if(mobileNumber == ""){
				document.getElementById('mobnum').innerHTML =" ** Please fill this field";
				return false;
			}
            if (!phnPattern.test(mobileNumber) || mobileNumber.length!=10 || isNaN(mobileNumber)) {
                document.getElementById('mobnum').innerHTML ="** Invalid Mobile number";
                return false;
            }

            if(lastPosting == ""){
				document.getElementById('lastloc').innerHTML ="** Please fill this field";
				return false;
			}

            if(recommendation == ""){
				document.getElementById('rcmd').innerHTML ="** Please fill this field";
				return false;
			}
			if((recommendation.length <= 200)) {
				document.getElementById('rcmd').innerHTML ="** Text length too long";
				return false;	
			}

}