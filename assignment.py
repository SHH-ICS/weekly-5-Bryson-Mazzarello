def calculatePi(digits):
  result = 0
  for i in range(digits):
    result = result + ((-1)**i/(2*i+1))*4
  return result

number_of_digits = input(); chars = set('0123456789')
if all((c in chars) for c in number_of_digits):
  number_of_digits = int(number_of_digits)
  if number_of_digits > 0:
    print(calculatePi(number_of_digits))
  else:
    print("Invalid Input[Err:Less_Than_Zero]")
else:
  print("Invalid Input[Err:Not_A_Number]")