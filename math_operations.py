import sys
import re

# Midterm Exam - Cristobal Lara
num1 = float(sys.argv[1])
num2 = float(sys.argv[2])
operation = sys.argv[3]

def sum(a, b):
    return a + b

def sub(a, b):
    return a - b

def mul(a, b):
    return a * b

def div(a, b):
    if b == 0:
        return "Error a number cannot be divided by 0"
    return a / b

def is_number_regex(input):
    return bool(re.match(r'^\d+[.]?\d*$', str(input)))

print("<h2>Result:</h2>")
print("<ul>")
print(f"<li>Operation: {operation}</li>")
print(f"<li>Input 1: {num1}</li>")
print(f"<li>Input 2: {num2}</li>")

result = 0
if operation == "Addition":
    result = sum(num1, num2)
elif operation == "Subtraction":
    result = sub(num1, num2)
elif operation == "Multiplication":
    result = mul(num1, num2)
else:
    result = div(num1, num2)

if is_number_regex(result):
    if result > 100:
        result *= 2
    elif result < 0:
        result += 50

print(f"<li>Result: {result}</li>")
print("</ul>")
print("<br>")