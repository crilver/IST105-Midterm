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

print("<h2>Your selections were:</h2>")
print("<ul>")
print(f"<li>First number: {num1}</li>")
print(f"<li>Second number: {num2}</li>")
print(f"<li>Selected operation: {operation}</li>")
print("</ul>")
print("<br>")
print("<h2>Result:</h2>")

result = 0
if operation == "sum":
    result = sum(num1, num2)
elif operation == "sub":
    result = sub(num1, num2)
elif operation == "mul":
    result = mul(num1, num2)
else:
    result = div(num1, num2)

if not is_number_regex(result):
    print(f"<h2>{result}</h2>")
else:
    if result > 100:
        print(f"<h2>The result {result} is greater than 100 and will be multiplied by 2</h2>")
        result *= 2
    elif result < 0:
        print(f"<h2>The result {result} is less than 0 -> 50 added to the result</h2>")
        result += 50

    print(f"<h2>Final Result: {result}</h2>")