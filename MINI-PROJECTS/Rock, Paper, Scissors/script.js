const choices = ["rock", "paper", "scissors"];

function computerChoice() {
    const randomIndex = Math.floor(Math.random() * 3);
    return choices[randomIndex];
}

function playGame(playerChoice) {
    const compChoice = computerChoice();

    if (playerChoice === compChoice) {
        return "It's a tie!";
    } else if (
        (playerChoice === "rock" && compChoice === "scissors") ||
        (playerChoice === "paper" && compChoice === "rock") ||
        (playerChoice === "scissors" && compChoice === "paper")
    ) {
        return "You win!";
    } else {
        return "Computer wins!";
    }
}

document.getElementById("rock").addEventListener("click", () => {
    const result = playGame("rock");
    document.getElementById("result").innerHTML = `You chose Rock. ${result}`;
});

document.getElementById("paper").addEventListener("click", () => {
    const result = playGame("paper");
    document.getElementById("result").innerHTML = `You chose Paper. ${result}`;
});

document.getElementById("scissors").addEventListener("click", () => {
    const result = playGame("scissors");
    document.getElementById("result").innerHTML = `You chose Scissors. ${result}`;
});
