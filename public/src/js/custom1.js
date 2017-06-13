        function onlyAlphabets(event) {
			var char =event.which;
			if(char >31 && char != 32 && (char < 65 || char >90) && (char < 97 || char >122))
			{
				return false;
			}
        }
