use std::cell::RefCell;

use std::rc::Rc;

fn main() {
    let l = List::<i64>::create_list();
    l.borrow().append_node(1);
    l.borrow().append_node(2);
    println!("{:?}", l);
}

#[derive(Debug, PartialEq, Clone)]
struct Node<T: PartialEq + Clone + Copy> {
    data: T,
    next: Option<Rc<RefCell<Node<T>>>>,
}

#[derive(Debug)]
struct List<T: PartialEq + Clone + Copy> {
    start: Rc<RefCell<Node<T>>>,
}

impl<T: PartialEq + Clone + Copy> List<T> {
    fn create_list() -> Rc<RefCell<List<i32>>> {
        let newnode = Node::newnode(0);
        Rc::new(RefCell::new(List { start: newnode }))
    }

    fn append_node(&self, data: T) {
        let newnode = Node::newnode(data);

        let mut node = self.start.clone();

        while node.next != None {
            let next = node.next;
            // node = next.unwrap().borrow_mut();
        }
        node.next = Some(newnode);
    }

    // fn delete_node(&mut self) {
    //     let node = self.start.clone();
    //     let mut parent = *node.borrow();
    //     while node.borrow().next != None {
    //         *node.borrow_mut() = *node.borrow().next.unwrap().borrow();
    //         parent = *node.borrow();
    //     }

    //     parent.next = None;
    // }
}

impl<T: PartialEq + Clone + Copy> Node<T> {
    fn newnode(data: T) -> Rc<RefCell<Node<T>>> {
        Rc::new(RefCell::new(Self {
            data: data,
            next: None,
        }))
    }
}
