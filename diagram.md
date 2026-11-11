```mermaid
classDiagram

FuncionarioInterface <|--> FuncionarioRepository

class FuncionarioInterface {
    <<interface>>
    + contratar()
    + demitir()
}

class Funcionario {
    - FuncionarioCLT
    - FuncionarioPJ
}
```