# Coding Challenge: Mitarbeiter-Schichtaggregation mit der Ordio Shifts API

Hier ist eine Coding-Challenge-Beschreibung für die Nutzung der Shifts API von Ordio, um alle Schichten für die Mitarbeiter zu aggregieren:

## Requirements

- PHP: ">=8.2"

## Hintergrund

Ordio ist eine Plattform zur Verwaltung von Schichtplänen. Über die Shifts API können Informationen zu geplanten Schichten abgerufen werden. Deine Aufgabe ist es, eine Anwendung oder ein Skript zu entwickeln, das alle Schichten für jeden Mitarbeiter aggregiert und eine übersichtliche Darstellung ausgibt.

## Aufgabenstellung

1. Daten abrufen
    •	Verwende die Shifts API von Ordio (https://public.ordio.com/api/doc), um eine Liste aller Schichten abzurufen.
    • Eine Schicht enthält mehrere Candidates (Mitarbeiter), aber nur die mit Status 2 oder 3 sollen berücksichtigt werden.
    • Stelle sicher, dass alle relevanten Daten für die Aggregation erfasst werden (z. B. Mitarbeiter-ID, Name, Schichtbeginn, Schichtende).

2. Datenverarbeitung
    •	Aggregiere die Schichten pro Mitarbeiter.
    •	Berechne für jeden Mitarbeiter:
    •	Gesamtanzahl der Schichten
    •	Gesamte Arbeitszeit (in Stunden)
3. Ausgabeformat
    •	Die aggregierten Daten sollen in einem strukturierten Format ausgegeben werden, z. B.:

{
"employees": [
{
"employee_id": 123,
"name": "Max Mustermann",
"total_shifts": 5,
"total_hours": 40
},
{
"employee_id": 456,
"name": "Lisa Müller",
"total_shifts": 3,
"total_hours": 24
}
]
}

• Alternativ kann eine CSV- oder Tabellenformatierung genutzt werden.

4. Bonus (Optional)
   • Erstelle eine einfache Webanwendung oder CLI-Anwendung zur Anzeige der aggregierten Schichtdaten.
   • Ermögliche eine Filterung nach bestimmten Zeiträumen (z. B. letzte Woche, letzter Monat).

## Bewertungskriterien

    •	Funktionalität: Ruft das Skript korrekt die Schichtdaten ab und aggregiert sie richtig?
    •	Code-Qualität: Ist der Code sauber, gut strukturiert und verständlich?
    •	Fehlertoleranz: Geht das Skript robust mit API-Fehlern oder fehlenden Daten um?
    •	Performance: Skaliert die Lösung auch bei vielen Mitarbeitern und Schichten?

## Hinweise

    •	Die API-Dokumentation findest du unter: https://public.ordio.com/api/doc
    •	Falls eine Authentifizierung erforderlich ist, nutze die entsprechenden API-Keys oder Tokens (Details in der API-Dokumentation).
