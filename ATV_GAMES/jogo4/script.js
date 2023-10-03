for (i = 0; i < 3; i++) {
    let a = this.value
    for (j = 0; j < 3; j++) {
        document
            .getElementById('InputOf-col${i}-row${j}')
            .classList.add("bigBox-1");
        document
            .getElementById('InputOf-col${i + 3}-row${j}')
            .classList.add("bigBox-2");
        document
            .getElementById('InputOf-col${i + 6}-row${j}')
            .classList.add("bigBox-3");
        document
            .getElementById('InputOf-col${j}-row${i + 3}')
            .classList.add("bigBox-4");
        document
            .getElementById('InputOf-col${i + 3}-row${j + 3}')
            .classList.add("bigBox-5");
        document
            .getElementById('InputOf-col${i + 6}-row${j + 3}')
            .classList.add("bigBox-6");
        document
            .getElementById('InputOf-col${j}-row${i + 6}')
            .classList.add("bigBox-7");
        document
            .getElementById('InputOf-col${j + 3}-row${i + 6}')
            .classList.add("bigBox-8");
        document
            .getElementById('InputOf-col${i + 6}-row${j + 6}')
            .classList.add("bigBox-9");
    }
}

function checkBoxDuplicates() {
    let thisBoxClass = this.classList.value.charAt(20);
    let allBoxInputs = document.querySelectorAll('.bigBox-${+thisBoxClass}');

    for (i = 0; i < allBoxInputs.length; i++) {
        if (+this.value == +allBoxInputs[i].value &&
            this.id != allBoxInputs[i].id &
            this.value != null &
            allBoxInputs[i] != null
        ) {
            allBoxInputs[i].style.color = "#FF6262";
            this.style.color = "#FF6262";

            setTimeout(() => {
                this.style.color = "white";
                this.value = null;
                allBoxInputs.forEach((item) => {
                    item.style.color = "white";
                });
            }, 500);
        }
    }
}

for (let i = 0; i < 9; i++) {
    for (let j = 0; j < 9; j++) {
        document
            .getElementById('InputOf-col${i}-row${j}')
            .addEventListener("input", checkRowsAndColsDuplicates)
        document
            .getElementById('InputOf-col${i}-row${j}')
            .addEventListener("input", checkBoxDuplicates)
        document
            .getElementById('InputOf-col${i}-row${j}')
            .addEventListener("input", verifyNumberBigOrSmallNumbers)
    }

}

document.getElementById('checkBoardBtn').addEventListener('click', () => {

    let checkForEmptySpaces = () => {
        for (i = 0; i < 9; i++) {
            for (j = 0; j < 9; j++) {
                let selectInputs = document.getElementById('InputOf-col${i}-row${j}');
                let selectInputsValues = parseInt(selectInputs.value);
                if (!selectInputsValues) {
                    selectInputs.style.backgroundColor = "rgba(0, 0, 0, .3)";
                    setTimeout(function () {
                        selectInputs.style.backgroundColor = "transparent";
                    }, 1000);
                }
            }
        }
    }


    let allInputsCells = docuemnt.querySelectorAll(".inputsDesign");

    const inputsArr = [];

    allInputsCells.forEach((cell) => {
        inputsArr.push(cell);
    });

    function checkAllInputs(item) {
        if (item.value >= 1) return true;
    }

    function fullBoardValidation() {
        if (inputsArr.every(checkAllInputs) == false) {
            checkForEmptySpaces();
        } else if (inputsArr.every(checkAllInputs) == true) {
            alert("Você completou a tabela")
        }

    }

    fullBoardValidation();

})

document.getElementById('restartBtn').addEventListener('click', () => {
    for (i = 0; i < 9; i++) {
        for(j = 0; j < 9; j++){
            let selectInputs=document.getElementById('InputOf-col${i}-row${j}');
            selectInputs.value = sudokuBoard[i][j]
        }
        
    }
})