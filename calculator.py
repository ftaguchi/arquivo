"""Simple CLI calculator."""


def add(a, b):
    return a + b


def subtract(a, b):
    return a - b


def multiply(a, b):
    return a * b


def divide(a, b):
    if b == 0:
        raise ZeroDivisionError("Cannot divide by zero")
    return a / b


def get_number(prompt):
    while True:
        raw = input(prompt).strip()
        try:
            return float(raw)
        except ValueError:
            print("Entrada invalida. Digite um numero.")


def get_operation():
    operations = {
        "+": ("Soma", add),
        "-": ("Subtracao", subtract),
        "*": ("Multiplicacao", multiply),
        "/": ("Divisao", divide),
    }
    prompt = "Escolha a operacao (+, -, *, /): "
    while True:
        op = input(prompt).strip()
        if op in operations:
            return operations[op]
        print("Operacao invalida. Tente novamente.")


def main():
    print("Calculadora simples")
    left = get_number("Primeiro numero: ")
    right = get_number("Segundo numero: ")
    op_name, op_func = get_operation()
    try:
        result = op_func(left, right)
    except ZeroDivisionError as exc:
        print(f"Erro: {exc}")
        return
    print(f"Resultado da {op_name.lower()}: {result}")


if __name__ == "__main__":
    main()
