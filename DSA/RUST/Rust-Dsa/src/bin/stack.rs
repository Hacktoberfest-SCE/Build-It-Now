use std::fmt::Debug;

fn main() {
    let mut s1: Stack<i64> = Stack::new(1);
    Stack::<i64>::process_instruction::<&str, &str>(s1.push(5));
    Stack::<i64>::process_instruction::<&str, &str>(s1.push(8));
    Stack::<i64>::process_instruction::<i64, &str>(s1.pop());
}

#[derive(Debug)]
struct Stack<T: Debug> {
    stack: Vec<T>,
    capacity: i64,
}

impl<T: Debug> Stack<T> {
    fn new(capacity: i64) -> Self {
        Self {
            stack: Vec::new(),
            capacity: capacity,
        }
    }

    fn push(&mut self, data: T) -> Result<&str, &str> {
        if self.stack.len() as i64 <= self.capacity {
            self.stack.push(data);
            Ok("Data pushed to stack")
        } else {
            Err("STACK OVERFLOW!")
        }
    }

    fn pop(&mut self) -> Result<T, &str> {
        if self.stack.len() > 0 {
            Ok(self.stack.pop().unwrap())
        } else {
            Err("STACK UNDERFLOW!")
        }
    }

    fn display(&self) {
        if self.stack.len() == 0 {
            println!("STACK EMPTY!");
        } else {
            let line = "-------";
            for i in self.stack.iter().rev() {
                println!("{}", line);
                println!("   {:?}", i);
            }
            println!("{}", line);
        }
    }

    fn process_instruction<U: Debug, E: Debug>(instruction: Result<U, E>) {
        match instruction {
            Ok(data) => println!("{:?}", data),
            Err(t) => println!("{:?}", t),
        }
    }
}
