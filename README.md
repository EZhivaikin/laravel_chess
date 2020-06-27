
# Laravel chess

## API methods

#### POST /api/game/newGame 
Creates new game, returns new game Id
#### PUT /api/{game_id}/move
Retrieves JSON 
```json
{
  "from": "a2",
  "to": "a3"
}
```
Returns either 200 OK Success JSON:
 ```json
{
  "piece": "Pawn",
  "from": "a2",
  "to": "a3"
}
```
or one of the Exceptions:
- GameIsOverException
- ImpossibleMoveException
- MoveOutOfTheBoardException

#### GET /api/{game_id}/getBoardState
Returns game board JSON by game id
```
"board": [
  "a":[0: "Rook", 1: "Pawn", ...],
  "b":[0: "Knight", 1: "Pawn", ...],
...
]
```



