0 - partenza dalla scheda
1 - Due strategie per eliminare lo switch (code smell) statement:
    polimofismo (dispact dinamico) - rompere test il meno possibili -> preferibile perché il tipo di pappagallo nasce e muove durante e non deve cambiare durante la sua vita
    state strategy

2 - creiamo una funzione create che fa uguale al costruttore, il motivo è introdurre le modifiche in modo incrementale
3 - dopo avere creato la method dobbiamo iniziare a smontare lo switch
4 - il create ha uno switch che lancia il parrot european. Sono riscritti gli get speed